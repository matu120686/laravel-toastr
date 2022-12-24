<div class="container">
    <h1>Crea nuevos Usuarios</h1>
    <!-- @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif -->
    <form>
        <div class="mb-3">
            <label for="">Nombre</label>
            <input type="text" wire:model="name" class="form-control">
            @error('name') <em class="error">{{ $message }}</em> @enderror 
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" wire:model="email" class="form-control">
            @error('email') <em class="error">{{ $message }}</em> @enderror 
        </div>
        <div class="mb-3">
            <label for="">Password</label>
            <input type="password" wire:model="password" class="form-control">
            @error('password') <em class="error">{{ $message }}</em> @enderror
        </div>
        <button wire:click.prevent="store()" type="submit" class="btn btn-primary">Guardar</button>
    </form>
    <div class="table-primary">
        <table class="table">
            <thead>
                <tr>
                    <th cope="col">#</th>
                    <th cope="col">Nombre</th>
                    <th cope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
