<Pre>
    <b>tb_book</b>
    <table style="width:100%; border: 1px solid black;">
        <tr style="border: 1px solid black;">
            @foreach(array_keys($books->first()->toArray()) as $key)
                <td style="border: 1px solid black;">
                    {{$key}}
                </td>
            @endforeach
        </tr>
        @foreach($books as $book)
            <tr style="border: 1px solid black;">
                @foreach(array_keys($books->first()->toArray()) as $key)
                    <td style="border: 1px solid black;">
                        {{$book->$key}}
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>

    <b>tb_customer</b>
    <table style="width:100%; border: 1px solid black;">
        <tr style="border: 1px solid black;">
            @foreach(array_keys($customers->first()->toArray()) as $key)
                <td style="border: 1px solid black;">
                    {{$key}}
                </td>
            @endforeach
        </tr>
        @foreach($customers as $customer)
            <tr style="border: 1px solid black;">
                @foreach(array_keys($customer->first()->toArray()) as $key)
                    <td style="border: 1px solid black;">
                        {{$customer->$key}}
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>

    <b>tb_employee</b>
    <table style="width:100%; border: 1px solid black;">
        <tr style="border: 1px solid black;">
            @foreach(array_keys($employees->first()->toArray()) as $key)
                <td style="border: 1px solid black;">
                    {{$key}}
                </td>
            @endforeach
        </tr>
        @foreach($employees as $employee)
            <tr style="border: 1px solid black;">
                @foreach(array_keys($employee->first()->toArray()) as $key)
                    <td style="border: 1px solid black;">
                        {{$employee->$key}}
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>

    <b>tb_order</b>
    <table style="width:100%; border: 1px solid black;">
        <tr style="border: 1px solid black;">
            @foreach(array_keys($orders->first()->toArray()) as $key)
                <td style="border: 1px solid black;">
                    {{$key}}
                </td>
            @endforeach
        </tr>
        @foreach($orders as $order)
            <tr style="border: 1px solid black;">
                @foreach(array_keys($order->first()->toArray()) as $key)
                    <td style="border: 1px solid black;">
                        {{$order->$key}}
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>

    <b>tb_order_detail</b>
    <table style="width:100%; border: 1px solid black;">
        <tr style="border: 1px solid black;">
            @foreach(array_keys($order_details->first()->toArray()) as $key)
                <td style="border: 1px solid black;">
                    {{$key}}
                </td>
            @endforeach
        </tr>
        @foreach($order_details as $order_detail)
            <tr style="border: 1px solid black;">
                @foreach(array_keys($order_detail->first()->toArray()) as $key)
                    <td style="border: 1px solid black;">
                        {{$order_detail->$key}}
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>

    <b>tb_shipper</b>
    <table style="width:100%; border: 1px solid black;">
        <tr style="border: 1px solid black;">
            @foreach(array_keys($shippers->first()->toArray()) as $key)
                <td style="border: 1px solid black;">
                    {{$key}}
                </td>
            @endforeach
        </tr>
        @foreach($shippers as $shipper)
            <tr style="border: 1px solid black;">
                @foreach(array_keys($shipper->first()->toArray()) as $key)
                    <td style="border: 1px solid black;">
                        {{$shipper->$key}}
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>

    <b>tb_subject</b>
    <table style="width:100%; border: 1px solid black;">
        <tr style="border: 1px solid black;">
            @foreach(array_keys($subjects->first()->toArray()) as $key)
                <td style="border: 1px solid black;">
                    {{$key}}
                </td>
            @endforeach
        </tr>
        @foreach($subjects as $subject)
            <tr style="border: 1px solid black;">
                @foreach(array_keys($subject->first()->toArray()) as $key)
                    <td style="border: 1px solid black;">
                        {{$subject->$key}}
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>

    <b>tb_supplier</b>
    <table style="width:100%; border: 1px solid black;">
        <tr style="border: 1px solid black;">
            @foreach(array_keys($suppliers->first()->toArray()) as $key)
                <td style="border: 1px solid black;">
                    {{$key}}
                </td>
            @endforeach
        </tr>
        @foreach($suppliers as $supplier)
            <tr style="border: 1px solid black;">
                @foreach(array_keys($supplier->first()->toArray()) as $key)
                    <td style="border: 1px solid black;">
                        {{$supplier->$key}}
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>
</Pre>
