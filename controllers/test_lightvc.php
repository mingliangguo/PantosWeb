<?php
class TestLightvcController extends AppController {
    public function actionTestAction($one = null, $two = null) {
        if (is_null($one)) {
            $one = 'NULL';
        }
        if (is_null($two)) {
            $two = 'NULL';
        }
        $this->setVar('one', $one);
        $this->setVar('two', $two);
    }

    public function actionInvokeAction($one = null, $two = null) {
        if (is_null($one)) {
            $one = 'NULL';
        }
        if (is_null($two)) {
            $two = 'NULL';
        }
        $this->setVar('hello', 'Hello');
        $this->setVar('name', 'Gary!');
    }

}
?>
