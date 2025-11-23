@extends('layouts.public-site')

@section('content')

<!-- breadcrumb section start -->
<section class="breadcrumb-section rooms-bread">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white-clr text-center">
                Choose Your Room
            </h2>
        </div>
    </div>
</section>

@php
    $bookingData = request()->all();
    $room_type_id = $bookingData['room_type_id'] ?? null;
@endphp

<!-- Luxuries section start -->
<section class="luxries-section fix section-padding bg3">
    <div class="container">
        <form id="bookingForm" action="{{ route('booking.store') }}" method="POST">
            @csrf
            <div class="row g-md-4 g-4">
                @forelse ($roomTypes as $roomType)
                    <div class="col-md-6 col-lg-4">
                        <label class="luxries-single-item white-bg wow fadeInUp border p-2 room-card {{ $room_type_id == $roomType->id ? 'border-primary border-3 shadow' : '' }}" data-wow-delay=".4s" style="cursor:pointer;">
                            <input type="checkbox" name="room_type_ids[]" value="{{ $roomType->id }}" {{ $room_type_id == $roomType->id ? 'checked' : '' }} class="room-checkbox d-none">
                            <div class="thumb d-block mb-4 w-100 overflow-hidden aspect-video">
                                <img src="{{ $roomType->image_path }}"
                                    alt="{{ $roomType->name }}" class="w-100 overflow-hidden">
                            </div>
                            <div class="content">
                                <span class="text-clr fs-16 fw-bold d-block mb-1">{{ $roomType->price_per_night }}</span>
                                <h3 class="mb-sm-4 mb-3">
                                    <p class="fw-semibold d-block black-clr mb-0">{{ $roomType->name }}</p>
                                </h3>
                                <ul class="blog-admin d-flex align-items-center gap-3 mb-4 pb-xxl-2">
                                    <li class="d-flex align-items-center gap-2 black-clr fs-16 fw-500">
                                        <i class="fas fa-users"></i> {{ $roomType->max_occupancy }} Guests
                                    </li>
                                    @if (!empty($roomType->amenities))
                                        @foreach ($roomType->amenities as $amenity)
                                            @if ($loop->iteration > 2)
                                                @break
                                            @endif
                                            <li class="d-flex align-items-center gap-2 black-clr fs-16 fw-500">
                                                <i class="fas fa-star"></i> {{ $amenity }}
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </label>
                    </div>
                @empty
                    <p>No Rooms Available</p>
                @endforelse
            </div>

            <hr class="my-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Guest Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="guest_name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="guest_email" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="guest_phone" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Address</label>
                                    <input type="text" name="guest_address" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Address 2</label>
                                    <input type="text" name="guest_address_2" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Adults</label>
                                    <input type="number" name="adults" class="form-control" min="1" value="{{ $bookingData['adults'] ?? 1 }}" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Children</label>
                                    <input type="number" name="children" class="form-control" min="0" value="{{ $bookingData['children'] ?? 0 }}">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Check-in</label>
                                    <input type="date" name="check_in_date" class="form-control" value="{{ $bookingData['check_in'] ?? '' }}" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Check-out</label>
                                    <input type="date" name="check_out_date" class="form-control" value="{{ $bookingData['check_out'] ?? '' }}" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Special Requests</label>
                                    <textarea name="special_requests" class="form-control" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-success btn-lg px-5">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<hr>

<script>
    // Highlight selected room cards
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.room-checkbox');
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                const card = this.closest('.room-card');
                if (this.checked) {
                    card.classList.add('border-primary', 'border-3', 'shadow');
                } else {
                    card.classList.remove('border-primary', 'border-3', 'shadow');
                }
            });
        });
    });
</script>

@endsection