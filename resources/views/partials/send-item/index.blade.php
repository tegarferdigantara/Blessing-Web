<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-paper-plane"></i>
        <p>
            Send Item
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('send-item-online') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Online</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('send-item-on-off') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>On/Off</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('send-item-offline') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Offline</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('send-item-by-id') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Send Item By ID</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('send-rps') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Send RPS</p>
            </a>
        </li>
    </ul>
</li>
