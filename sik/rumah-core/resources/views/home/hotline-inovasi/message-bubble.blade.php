<div>
    @php
        $sender_name = Auth::user() ? $message->sender->nameOrMe() : _('Anonymous');
    @endphp

    @if($message->sender->isMe(Auth::user()))
	<!-- Message to the right -->
	<div class="direct-chat-msg right mb-4">
		<div class="direct-chat-infos clearfix">
			<span class="direct-chat-name float-right">{{ $sender_name }}</span>
			<span class="direct-chat-timestamp float-left">{{ $message->created_at }}</span>
		</div>
		<!-- /.direct-chat-infos -->
		<img class="direct-chat-img" src="{{ asset($message->sender->photoOrDefault()) }}"
			alt="{{ $message->sender->name }}">
		<!-- /.direct-chat-img -->
		<div class="direct-chat-text">
            {{ $message->message }}
		</div>
		<!-- /.direct-chat-text -->
	</div>

    @else

	<!-- /.direct-chat-msg -->
	<div class="direct-chat-msg mb-4">
		<div class="direct-chat-infos clearfix">
			<span class="direct-chat-name float-left">{{ $sender_name }}</span>
			<span class="direct-chat-timestamp float-right">{{ $message->created_at }}</span>
		</div>
		<!-- /.direct-chat-infos -->
		<img class="direct-chat-img" src="{{ asset($message->sender->photoOrDefault()) }}"
			alt="{{ $message->sender->name }}">
		<!-- /.direct-chat-img -->
		<div class="direct-chat-text">
            {{ $message->message }}
		</div>
		<!-- /.direct-chat-text -->
	</div>
	<!-- /.direct-chat-msg -->

    @endif
</div>
