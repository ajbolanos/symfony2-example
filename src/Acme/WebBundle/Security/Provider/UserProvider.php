<?php

namespace Acme\WebBundle\Security\Provider;

use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserProvider implements UserProviderInterface
{
  /**
   * @var UserManagerInterface
   */
  private $userManager;

  /**
   * @param UserManagerInterface $userManager
   */
  public function __construct(UserManagerInterface $userManager)
  {
    $this->userManager = $userManager;
  }

  /**
   * {@inheritDoc}
   */
  public function loadUserByUsername($usernameOrEmail)
  {
    $user = $this->userManager->findUserByUsernameOrEmail($usernameOrEmail);

    if (!$user) {
      throw new UsernameNotFoundException(sprintf('No user with name or email "%s" was found.', $usernameOrEmail));
    }

    return $user;
  }

  /**
   * {@inheritDoc}
   */
  public function refreshUser(UserInterface $user)
  {
    return $this->userManager->refreshUser($user);
  }

  /**
   * {@inheritDoc}
   */
  public function supportsClass($class)
  {
    return $this->userManager->supportsClass($class);
  }
}
