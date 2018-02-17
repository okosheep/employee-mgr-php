<?php

/**
 * authn actions.
 *
 * @package    employee-mgr
 * @subpackage authn
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class authnActions extends sfActions
{
  public function executeLoginFormEntry(sfWebRequest $request)
  {
    $this->redirect("authn/loginForm");
  }
  
  public function executeLoginForm(sfWebRequest $request)
  {
    $this->form = new LoginForm();
    
    return sfView::SUCCESS;
  }
  
  public function executeLogin(sfWebRequest $request)
  {
    $this->form = new LoginForm();

    if ($request->isMethod('post'))
    {
      $this->form->bind($request->getParameter('login'));
      if ($this->form->isValid())
      {
        $this->getUser()->setAuthenticated(true);
        $this->redirect('mypage/index');
        return;
      }
    }
    
    $this->setTemplate('loginForm');
    return sfView::SUCCESS;
  }
  
  public function executeLogout(sfWebRequest $request)
  {
    $this->getUser()->setAuthenticated(false);
    $this->redirect('authn/loggedout');
  }
  
  public function executeLoggedout(sfWebRequest $request)
  {
    return sfView::SUCCESS;
  }
}
