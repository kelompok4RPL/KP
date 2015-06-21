<?php
namespace Core\Controller;
abstract class Controller {
    abstract public function index();
    abstract public function update($param);
    abstract public function edit($param);
    abstract public function delete($param);
}
