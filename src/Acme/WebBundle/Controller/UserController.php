<?php

/*
 * This file is part of Alya.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *     Nils Adermann <naderman@naderman.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Acme\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Acme\WebBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


class UserController extends Controller
{
    protected $data;

    public function __construct()
    {
        // Load Default Data
        $this->data = array(
            'title' => 'Acme Project',
        );
    }
    /*
    public function myProfileAction(Request $req)
      {
          $user = $this->container->get('security.context')->getToken()->getUser();
          if (!is_object($user) || !$user instanceof UserInterface) {
              throw new AccessDeniedException('This user does not have access to this section.');
          }

  //        $packages = $this->getUserPackages($req, $user);

          return $this->container->get('templating')->renderResponse(
              'FOSUserBundle:Profile:show.html.'.$this->container->getParameter('fos_user.template.engine'),
              array(
  //                'packages' => $packages,
  //                'meta' => $this->getPackagesMetadata($packages),
                  'user' => $user,
              )
          );
      }
  */

    /**
     * @Template()
     * @Route("/users/{name}/", name="user_profile")
     * @ParamConverter("user", options={"mapping": {"name": "username"}})
     */

    /*
      public function profileAction(Request $req, User $user)
    {
    //        $packages = $this->getUserPackages($req, $user);
      print_r($user);
      return array(
    //            'packages' => $packages,
    //            'meta' => $this->getPackagesMetadata($packages),
        'user' => $user,
      );

    }
    */
}