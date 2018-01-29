<?php

namespace Drupal\annonce\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\Event;
use Drupal\Core\Session\AccountProxy;
use Drupal\Core\Database\Driver\mysql\Connection;
use Drupal\Core\Datetime\DateFormatter;
use Drupal\Core\Routing\RouteMatchInterface;

/**
 * Class testSubscriber.
 */
class testSubscriber implements EventSubscriberInterface {

  /**
   * Drupal\Core\Session\AccountProxy definition.
   *
   * @var \Drupal\Core\Session\AccountProxy
   */
  protected $currentUser;
  /**
   * Drupal\Core\Database\Driver\mysql\Connection definition.
   *
   * @var \Drupal\Core\Database\Driver\mysql\Connection
   */
  protected $database;
  /**
   * Drupal\Core\Datetime\DateFormatter definition.
   *
   * @var \Drupal\Core\Datetime\DateFormatter
   */
  protected $dateFormatter;

  /**
   * Constructs a new testSubscriber object.
   */
  public function __construct(AccountProxy $current_user, Connection $database, DateFormatter $date_formatter, RouteMatchInterface $currentRouteMatch) {
    $this->currentUser = $current_user;
    $this->database = $database;
    $this->dateFormatter = $date_formatter;
    $this->currentRouteMatch = $currentRouteMatch;
  }

  /**
   * {@inheritdoc}
   */
  static function getSubscribedEvents() {
    $events['kernel.request'] = ['onRequest'];

    return $events;
  }

  /**
   * This method is called whenever the kernel.request event is
   * dispatched.
   *
   * @param GetResponseEvent $event
   */
  public function onRequest(Event $event) {
    //kint($this->currentRouteMatch->getParameter('annonce'));
    //kint($this->currentUser->getUsername());
    $user = $this->currentUser->getUsername();

    drupal_set_message($user . ' est le nom de l\'utilisateur courant', 'status', TRUE);

    $currentRoute = $this->currentRouteMatch;
    $currentRoute = $currentRoute->getRouteName();


    if($currentRoute == 'entity.annonce.canonical') {
      $date = time();
      $user = $this->currentUser->id();
      $annonceId = $this->currentRouteMatch->getParameter('annonce')->id();
      //kint($user);
      $database = $this->database;
      $query = $database->insert('annonce_history')->fields(['uid' => $user, 'aid' => $annonceId, 'date' => $date])->execute();
      //kint($query);
    }
  }

}
