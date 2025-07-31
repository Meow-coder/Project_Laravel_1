<div class="mx-auto flex flex-col items-center justify-center h-screen bg-gradient-to-tr from-blue-600 to-gray-100">
    <div class="w-full max-w-md border border-gray-300 rounded-md p-4 bg-white">
        <div class = "text-2xl font-bold">
            <i class = 'fa fa-user me-2'>
                Sign In to Backoffice
            </i>
        </div>
        <form action="" class ="mt-5" wire:submit="signin">
            <div>Username</div>
            <input type="text" wire:model="username" class="form-control">
            @if (isset($errorUsername))
                <div class="text-red-500 text-sm">
                    <i class="fa fa-exclamation-triangle me-2"></i>
                    {{ $errorUsername }}
                </div>
            @endif

            <div>Password</div>
            <input type="password" wire:model="password" class="form-control">
            @if (isset($errorPassword))
                <div class="text-red-500 text-sm">
                    <i class="fa fa-exclamation-triangle me-2"></i>
                    {{ $errorPassword }}
                </div>
            @endif
            
            <button type="submit" class="btn btn-primary mt-4">Sign In</button>
        </form>

        @if (isset($error))
            <div class="text-red-500 mt-2">
                <i class="fa fa-exclamation-triangle me-2"></i>
                {{ $error }}
            </div>
        @endif
    </div>
</div>
