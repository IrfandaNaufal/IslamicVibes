<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/dashboard') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/kategori') }}">
                <i class="mdi mdi-tag menu-icon"></i>
                <span class="menu-title">Kategori</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/playlist') }}">
                <i class="mdi mdi-film menu-icon"></i>
                <span class="menu-title">Playlist</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/galeri') }}">
                <i class="mdi mdi-image menu-icon"></i>
                <span class="menu-title">Galeri</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-view-module menu-icon"></i>
                <span class="menu-title">Konten</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column">
                    <li class="nav-item active">
                        <a class="nav-link active" href="{{ url('admin/panduan') }}">
                            <i class="mdi mdi-book menu-icon"></i>
                            <span class="menu-title">Panduan Manasik Haji</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/video') }}">
                            <i class="mdi mdi-video menu-icon"></i>
                            <span class="menu-title">Video</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/berita') }}">
                            <i class="mdi mdi-newspaper menu-icon"></i>
                            <span class="menu-title">Berita</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>