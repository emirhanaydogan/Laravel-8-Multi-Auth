
 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index for Vehicle') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                    @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="float-right">
                         <a class="btn btn-success" href="{{ route('vehicles.create') }}"> Create New Vehicle</a>
                    </div>

                <table class="table table-striped  table-hover">

                    <tr>
                        <th><i class="fa fa-list-ol">No</i></th>
                        <th><i class="fa fa-user">Name</i></th>
                        <th><i class="fa fa-user-tag">Type</i></th>
                        <th><i class="fa fa-link">Plate</i></th>
                        <th><i class="fas fa-cogs">Action</i></th>
                    </tr>
                     @foreach ($vehicles as $vehicle)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $vehicle->name }}</td>
                        <td>{{ $vehicle->type }}</td>
                        <td>{{ $vehicle->plate }}</td>
                        <td>
                            <form action="{{ route('vehicles.destroy',$vehicle->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('vehicles.show',$vehicle->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('vehicles.edit',$vehicle->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>





