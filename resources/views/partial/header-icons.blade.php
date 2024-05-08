<li>
    <a href="#" class="option_links" title="cart"><i
            class='uil uil-shopping-cart-alt'></i><span
            class="noti_count">{{ \App\Models\Cart::where('user_id', Auth::id())->count() ?? 0 }}</span></a>
</li>
<li>
    <a href="#" class="option_links " data-bs-toggle="dropdown" data-bs-auto-close="true"
        aria-expanded="false"><i class='uil uil-envelope-alt'></i><span class="noti_count">

            {{ \App\Models\Message::where('recipient_id', Auth::id())->where('read', false)->count() ?? 0 }}
        </span>
    </a>

</li>

<li>
    <a href="#" class="option_links" data-bs-toggle="dropdown" data-bs-auto-close="true"
        aria-expanded="false"><i class='uil uil-bell'></i><span class="noti_count">3</span></a>

</li>