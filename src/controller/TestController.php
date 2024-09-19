<?php

/**
 * @RequestController("/test")
 */
class TestController extends BaseController
{
    /**
     * @GetMapping("/helloworld")
     */
    public function hello() {
        return $this->response("hello world");
    }
}
