@extends('app')
@section('content')
    <h1>Show Mentor </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($mentor['name']); ?></td>
            </tr>
            <tr>
                <td>ID</td>
                <td><?php echo ($mentor['id']); ?></td>
            </tr>
            <tr>
                <td>Qualification</td>
                <td><?php echo ($mentor['qualification']); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo ($mentor['address']); ?></td>
            </tr>
            <tr>
                <td>Zip</td>
                <td><?php echo ($mentor['zip']); ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo ($mentor['email']); ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php echo ($mentor['phone']); ?></td>
            </tr>
            
                  
            </tbody>
      </table>
    </div>
  
@stop
