@extends('master')
@section('content')
    <div class=" custom-product">
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>$ {{$total+10}}</td>
                </tr>
                </tbody>
            </table>
            <form action="/orderplace"method="POST">
                @csrf
                <div class="mb-3 mt-3">
                    <textarea class="form-control" name="address" placeholder="Enter your address"></textarea>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Payment method:</label><br><br>
                    <input type="radio" value="cash" name="payment"><span>online payment</span><br><br>
                    <input type="radio" value="cash" name="payment"><span>EMI payment</span><br><br>
                    <input type="radio" value="cash" name="payment"><span>payment on Delivery</span>
                </div>

                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>
        </div>
    </div>
@endsection
