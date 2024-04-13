<?php

use App\Models\Customer;
use App\Models\CustomerData;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
class CustomerTableTest extends TestCase
{
    use RefreshDatabase;
    public function test_customer_data_relation_should_return_collection(): void
    {
        $customer = Customer::factory()->create();
        (
        $customerData = new CustomerData ([
            'customer_id' => $customer->id,
            'data'       => 'Some data for customer ' . $customer->name,
        ])
        )->save();

        $this->assertModelExists($customerData);
        $this->assertArrayHasKey('customer_id', $customerData->toArray());
        $this->assertArrayHasKey('data', $customerData->toArray());

        $this->assertNotEmpty($customer->data);
        $this->assertCount(1, $customer->data);

        CustomerData::create([
            'customer_id' => $customer->id,
            'data'       => 'Some data for customer ' . $customer->name,
        ]);

        $customer->refresh();

        $this->assertCount(2, $customer->data);


        $dumpedCustomer = $customer->toArray();

        $this->assertIsArray($dumpedCustomer);
        $this->assertArrayHasKey('id', $dumpedCustomer);
        $this->assertIsString($dumpedCustomer['id']);
        $this->assertArrayHasKey('food', $dumpedCustomer);
        $this->assertIsInt($dumpedCustomer['food']);
    }
}
