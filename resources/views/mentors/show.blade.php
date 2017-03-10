@extends('app')
@section('content')
    <h1>Show Mentor </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($mentor['Name']); ?></td>
            </tr>
            <tr>
                <td>ID</td>
                <td><?php echo ($mentor['ID']); ?></td>
            </tr>
            <tr>
                <td>Qualification</td>
                <td><?php echo ($mentor['Qualification']); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo ($mentor['Address']); ?></td>
            </tr>
            <tr>
                <td>Zip</td>
                <td><?php echo ($mentor['Zip']); ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo ($mentor['Email']); ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php echo ($mentor['Phone']); ?></td>
            </tr>
            
                  
            </tbody>
      </table>
    </div>
  
@stop
