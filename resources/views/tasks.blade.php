@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <livewire:task-list-tasks/>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">
                        Add New Task
                    </div>
                    <div class="card-body">
                        <livewire:add-task/>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Calendar
                    </div>
                    <div class="card-body">
                        <!-- Include FullCalendar here -->
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid'],
                events: [
                    // You can populate events dynamically here based on tasks
                ]
            });
            calendar.render();
        });
    </script>
@endpush
