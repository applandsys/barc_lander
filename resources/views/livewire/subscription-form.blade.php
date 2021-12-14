<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    @if (count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Sorry!</strong> invalid input.<br><br>
            <ul style="list-style-type:none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@if($issubmit==true)
    <div class="alert alert alert-light" role="alert">
        Thanks for your registration
    </div>
@else
<div x-show="open" x-data="{ open: true}">
    <form action="#" method="get" target="_blank" class="trial-form">
        <div class="form-group mb-2">
           <input wire:model="name" ame="name" type="text" placeholder="Your full name">
        </div>
        <div class="form-group mb-2">
            <input wire:model="email"   name="email" type="email" placeholder="Your email address">
        </div>
        <div class="form-group mb-2">
            <input wire:model="phone"  name="phone" type="text" placeholder="Your mobile number">
        </div>
        <div class="form-group" style="float: right;
        margin-right: 14px;">
            <div class="button">
                <button type="button" class="btn" x-on:click="open=false" wire:click="store()">Start free trial</button>
            </div>
        </div>
    </form>
</div>

@endif

</div>
