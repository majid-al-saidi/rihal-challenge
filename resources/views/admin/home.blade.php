@extends('layouts.k-wd')
@section('content')

    <!-- Content header -->
    <div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
        <h1 class="text-2xl font-semibold">Dashboard</h1>
        <a href="https://github.com/Kamona-WD/kwd-dashboard" target="_blank"
            class="px-4 py-2 text-sm text-white rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark">
            View on github
        </a>
    </div>

    <!-- Content -->
    <div class="mt-2 p-5">

        <p>Top 10 Countries with Number of Users:</p>
        <table class="w-full">
            <thead>
                <tr>
                    <th class="w-28">
                       Country Name
                    </th>
                    <th>
                        Number of Students
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($top_data as $key => $count)
                    <tr>
                        <td>
                            {{$key}}
                        </td>
                        <td style="text-align: center;">
                            {{$count}}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10">No entries found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <p class="mt-7">Users Per Country:</p>
        <div class="w-full">
            {{ $chart1->renderHtml() }}
        </div>

        <div class="w-full">
            {{ $chart2->renderHtml() }}
        </div>



    </div>




@endsection


@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    {{ $chart1->renderJs() }}
    {{ $chart2->renderJs() }}
@endpush
