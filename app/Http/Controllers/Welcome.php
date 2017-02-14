<?php
/**
 * Welcome controller
 *
 * @author David Carr - dave@novaframework.com
 * @version 3.0
 */

namespace App\Http\Controllers;

use App\Core\ThemedController;

use Nova\Support\Facades\View;


/**
 * Sample controller showing 2 methods and their typical usage.
 */
class Welcome extends ThemedController
{

    /**
     * Create and return a View instance.
     */
    public function index()
    {
        $message = __('Hello, welcome from the welcome controller! <br/>
this content can be changed in <code>/app/Views/Welcome/Welcome.php</code>');

        return View::make('Welcome/Welcome')
            ->shares('title', __('Welcome'))
            ->with('welcomeMessage', $message);
    }

    /**
     * Create and return a View instance.
     */
    public function subPage()
    {
        $message = __('Hello, welcome from the welcome controller and subpage method! <br/>
This content can be changed in <code>/app/Views/Welcome/SubPage.php</code>');

        return $this->getView()
            ->shares('title', __('Subpage'))
            ->withWelcomeMessage($message);
    }

}