<?php

/**
 * @file
 * Contains \Drupal\Console\Generator\ProfileGenerator.
 */

namespace Drupal\Console\Generator;

use Drupal\Console\Core\Generator\Generator;

class ProfileGenerator extends Generator
{
    public function generate(
        $profile,
        $machine_name,
        $dir,
        $description,
        $core,
        $dependencies,
        $themes,
        $distribution
    ) {
        $dir = ($dir == "/" ? '': $dir).'/'.$machine_name;
        if (file_exists($dir)) {
            if (!is_dir($dir)) {
                throw new \RuntimeException(
                    sprintf(
                        'Unable to generate the profile as the target directory "%s" exists but is a file.',
                        realpath($dir)
                    )
                );
            }
            $files = scandir($dir);
            if ($files != ['.', '..']) {
                throw new \RuntimeException(
                    sprintf(
                        'Unable to generate the profile as the target directory "%s" is not empty.',
                        realpath($dir)
                    )
                );
            }
            if (!is_writable($dir)) {
                throw new \RuntimeException(
                    sprintf(
                        'Unable to generate the profile as the target directory "%s" is not writable.',
                        realpath($dir)
                    )
                );
            }
        }

        $parameters = [
            'profile' => $profile,
            'machine_name' => $machine_name,
            'type' => 'profile',
            'core' => $core,
            'description' => $description,
            'dependencies' => $dependencies,
            'themes' => $themes,
            'distribution' => $distribution,
        ];

        $this->renderFile(
            'profile/info.yml.twig',
            $dir . '/' . $machine_name . '.info.yml',
            $parameters
        );

        $this->renderFile(
            'profile/profile.twig',
            $dir . '/' . $machine_name . '.profile',
            $parameters
        );

        $this->renderFile(
            'profile/install.twig',
            $dir . '/' . $machine_name . '.install',
            $parameters
        );
    }
}
