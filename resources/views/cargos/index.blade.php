
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index for Cargo Register') }}
        </h2>
    </x-slot>
    <div class="py-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <div class="max-w-11xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="float-right">            
                          <a class="btn btn-success" href="{{ route('cargos.create') }}"> Create New Cargo</a>
                    </div>
              
                <table class="table table-striped  table-hover">
        
                    <tr>
                        <th><i class="fa fa-list-ol">No</i></th>
                        <th><i class="fa fa-user">SenderName</i></th>
                        <th><i class="fa fa-user-tag">SenderTcNo</i></th>
                        <th><i class="fa fa-link">SenderPhone</i></th>
                        <th><i class="fa fa-user">SenderAdress</i></th>
                        <th><i class="fa fa-user-tag">ReceiverName</i></th>
                        <th><i class="fa fa-link">ReceiverTcNo</i></th>
                        <th><i class="fa fa-user-tag">ReceiverPhone</i></th>
                        <th><i class="fa fa-link">ReceiverAdress</i></th>
                        <th><i class="fa fa-link">Price</i></th>
                        @if (Auth::user()->hasRole('admin'))
                        <th><i class="fa fa-link">DifferencePrice</i></th>
                        @endif  
                        <th><i class="fa fa-link">Vehicle</i></th>
                        <th><i class="fas fa-cogs">Action</i></th>
                    </tr>
                    @foreach ($cargos as $cargo)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $cargo->sname }}</td>
                        <td>{{ $cargo->stcno }}</td>
                        <td>{{ $cargo->sphone }}</td>
                        <td>{{ $cargo->sadress }}</td>
                        <td>{{ $cargo->rname }}</td>
                        <td>{{ $cargo->rtcno }}</td>
                        <td>{{ $cargo->rphone }}</td>
                        <td>{{ $cargo->radress }}</td>
                        <td>{{ $cargo->price }}</td>
                        @if (Auth::user()->hasRole('admin')) 
                        <td>{{ $cargo->diff_price }}</td>
                        @endif
                        <td>{{ $cargo->vehicle->name}}</td>      
                        <td>
                            <form action="{{ route('cargos.destroy',$cargo->id) }}" method="POST">
               
                                <a class="btn btn-info" href="{{ route('cargos.show',$cargo->id) }}">Show</a>
                
                                <a class="btn btn-primary" href="{{ route('cargos.edit',$cargo->id) }}">Edit</a>
               
                                @csrf
                                @method('DELETE')
                  
                                <button type="submit" class="btn btn-warning">Delete</button>
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
