@extends('layouts.master')
@section('pageTitle', 'View Loan')
@section('content')
<div class="content">
  <div class="container">
    <div class="card mt-3">
      <div class="card-header">
        <h4 class="card-title text-center">Loan Application</h4>
      </div>

      <div class="card-body">
        <div class="table-responsive p-2">
          <table class="table table-hover">
              <tr>
                <th>Name</th>
                <td>{{ $loan->lastname }} {{ $loan->firstname }} {{ $loan->middlename }}</td>
              </tr>

              <tr>
                <th>Email</th>
                <td>{{ $loan->email }}</td>
              </tr>

              <tr>
                <th>Phone</th>
                <td>{{ $loan->phone }}</td>
              </tr>

              <tr>
                <th>Address</th>
                <td>{{ $loan->address }}</td>
              </tr>

              <tr>
                <th>Gender</th>
                <td>{{ $loan->gender }}</td>
              </tr>

              <tr>
                <th>Date of Birth</th>
                <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($loan->dob))->toFormattedDateString() }} ({{ \Carbon\Carbon::createFromFormat('Y-m-d', $loan->dob)->age }} Years Old)</td>
              </tr>

              <tr>
                <th>Passport</th>
                <td>
                  <a href="{{ asset('storage') }}/{{ $loan->photo }}">
                    <img src="{{ asset('storage') }}/{{ $loan->photo }}" style="height: 100px; width: 100px">
                  </a>
                </td>
              </tr>

              <hr>

              <tr>
                <th>BVN</th>
                <td>{{ $loan->bvn}}</td>
              </tr>
              <tr>
                <th>Valid ID Card Copy/Scan</th>
                <td>
                  <a href="{{ asset('storage') }}/{{ $loan->id_card }}">
                    <img src="{{ asset('storage') }}/{{ $loan->id_card }}" style="height: 100px; width: 100px">
                  </a>
                </td>
              </tr>

              <tr>
                <th>Amount Needed in Naira</th>
                <td>{{ $loan->amount }}</td>
              </tr>

              <tr>
                <th>Interest in %</th>
                <td>{{ $loan->interest }}</td>
              </tr>

              <tr>
                <th>Purpose of Loan</th>
                <td>{{ $loan->purpose }}</td>
              </tr>

              <tr>
                <th>Nature of Business Venture (Explain Briefly)</th>
                <td>{{ $loan->nature }}</td>
              </tr>

              <tr>
                <th>Exact Location(s) of Business(es) or Industries</th>
                <td>{{ $loan->location }}</td>
              </tr>

              <tr>
                <th>Business Experience (Include how long you have been in the business)</th>
                <td>{{ $loan->experience }}</td>
              </tr>

              <tr>
                <th>Repayment proposal for both principal and interest</th>
                <td>{{ $loan->repayment }}</td>
              </tr>

              <tr>
                <th>Securities (Collaterals/gurantors for the loan)</th>
                <td>{{ $loan->security }}</td>
              </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
