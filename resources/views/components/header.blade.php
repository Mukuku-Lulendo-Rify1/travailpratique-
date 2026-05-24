<header>
     <nav>
        <a href="index.html" class="nav-logo">Le Blog</a>
        <ul class="nav-links">
            <li><a href={{ url('/public/index') }}>Accueil</a></li>
            <li><a href={{ url('articles') }}>Articles</a></li>
            <li><a href={{ url('/public/categories')}}>Catégories</a></li>
            <li><a href={{ url('/posts/about')}}>À propos</a></li>
            <li><a href={{ route('dashboard.index')}}>Dashboard</a></li>
        </ul>
    </nav>
</header>