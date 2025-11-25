@extends('layouts.public-site')

@section('content')

<!-- breadcrumb section start -->
<section class="breadcrumb-section rooms-bread">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white-clr text-center">
                Booking Confirmation
            </h2>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow mb-4">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0 text-white">Thank you for your booking!</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="mb-2">Booking Reference: <span class="badge bg-primary">{{ $booking->booking_reference }}</span></h5>
                            <p class="mb-1"><strong>Booking Status:</strong> <span class="badge bg-{{ $booking->status_badge }}">{{ ucfirst($booking->status) }}</span></p>
                            <p class="mb-1"><strong>Payment Status:</strong> <span class="badge bg-{{ $booking->payment->payment_status === 'paid' ? 'success' : ($booking->payment->payment_status === 'failed' ? 'danger' : 'warning') }}">{{ ucfirst($booking->payment->payment_status) }}</span></p>
                        </div>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Guest Name</th>
                                    <td>{{ $booking->guest_name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $booking->guest_email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $booking->guest_phone }}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $booking->guest_address }}{{ $booking->guest_address_2 ? ', ' . $booking->guest_address_2 : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Check-in Date</th>
                                    <td>{{ $booking->check_in_date->format('F d, Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Check-out Date</th>
                                    <td>{{ $booking->check_out_date->format('F d, Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Nights</th>
                                    <td>{{ $booking->nights }}</td>
                                </tr>
                                <tr>
                                    <th>Room Type(s)</th>
                                    <td>{{ $booking->room_type_names }}</td>
                                </tr>
                                <tr>
                                    <th>Adults</th>
                                    <td>{{ $booking->adults }}</td>
                                </tr>
                                <tr>
                                    <th>Children</th>
                                    <td>{{ $booking->children }}</td>
                                </tr>
                                <tr>
                                    <th>Special Requests</th>
                                    <td>{{ $booking->special_requests ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Total Amount</th>
                                    <td><strong>{{ $booking->formatted_total }}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="alert alert-info mt-4">
                            <i class="fa fa-info-circle"></i> A confirmation email has been sent to <strong>{{ $booking->guest_email }}</strong>.
                        </div>
                        <div class="text-center mt-3 d-flex gap-3 justify-content-end">
                            <a href="/" class="btn btn-outline-primary">Back to Home</a>

                            <form action="{{ route('booking.payment', $booking->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">
                                    Pay Online
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection