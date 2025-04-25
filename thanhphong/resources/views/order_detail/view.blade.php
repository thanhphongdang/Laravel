@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>{{$order->id}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            {{-- <td>{{$order->id}}</td> --}}
                            {{-- <td>{{$role->name}}</td> --}}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <div class="container" style="margin-top: 20px">
        <h3>List of products</h3>
        <div class="row justify-content-center">
            <table>
                <thead>
                <tr>

                    <th>Name</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Mô tả</th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $product)
                    <tr>

                        <th>{{$product->name}}</th>
                        <th>{{$product->price}}</th>
                        <th>{{$product->quantity}}</th>
                        <th>{{$product->description}}</th>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
