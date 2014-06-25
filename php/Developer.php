<?php
class TestingBase extends PHPUnit_Framework_TestCase {
    protected $logger;
    public function setUp() {
        $this->logger = new Logger();
    }
}

class PayrollTest extends TestingBase {
    protected $payroll_engine;
    public function setUp() {
        parent::setUp();

        $this->payroll_engine = new Payroll_Engine();
    }
}
