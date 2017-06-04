<?php

namespace Jaxon\App\Test;

use Jaxon\Sentry\Classes\Armada as JaxonClass;

class Pgw extends JaxonClass
{
    public function sayHello($sTemplate, $isCaps, $bNotify = true)
    {
        $html = $this->view()->render($sTemplate . '::test/hello', ['isCaps' => $isCaps]);
        $this->response->assign('div1', 'innerHTML', $html);
        if(($bNotify))
        {
            // Show last command, and save this one in the session.
            $this->instance('.Session')->command('sayHello');
            // Show a success notification.
            $message = $this->view()->render($sTemplate . '::test/message', [
                'element' => 'div1',
                'attr' => 'text',
                'value' => $html,
            ]);
            $this->response->dialog->success($message, $this->session()->get('DialogTitle', 'No title'));
        }

        return $this->response;
    }

    public function setColor($sTemplate, $sColor, $bNotify = true)
    {
        $this->response->assign('div1', 'style.color', $sColor);
        if(($bNotify))
        {
            // Show last command, and save this one in the session.
            $this->instance('.Session')->command('setColor');
            // Show a success notification.
            $message = $this->view()->render($sTemplate . '::test/message', [
                'element' => 'div1',
                'attr' => 'color',
                'value' => $sColor,
            ]);
            $this->response->dialog->success($message, $this->session()->get('DialogTitle', 'No title'));
        }

        return $this->response;
    }

    public function showDialog($sTemplate)
    {
        $this->response->dialog->setModalLibrary('pgwjs');

        $buttons = array(
            array(
                'title' => 'Clear session',
                'class' => 'btn',
                'click' => $this->cl('.Session')->rq()->reset()
            ),
            array(
                'title' => 'Close',
                'class' => 'btn',
                'click' => 'close'
            )
        );
        $options = array('maxWidth' => 400);
        $html = $this->view()->render($sTemplate . '::test/credit', ['library' => 'PgwModal']);
        $this->response->dialog->show("Modal Dialog", $html, $buttons, $options);

        return $this->response;
    }
}
