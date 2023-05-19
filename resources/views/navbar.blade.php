<nav>
    <ul class="lista">
        <a href="{{ $links['home'] }}">
            <li>Home</li>
        </a>
        <a href="{{ $links['uni'] }}">
            <li>Uni the cat</li>
        </a>
        <a href="{{ $links['testpage'] }}">
            <li>Pagina di test</li>
        </a>
    </ul>
</nav>
<style>
    .lista a {

        text-align: center;
        color: orange;
        text-decoration: none;

        font-size: 1.5rem;
    }

    .lista {
        display: flex;
        gap: 10px;
    }

    li {
        list-style-type: none;
    }
</style>
