<style>
    .grid-areas-layout {
        display: grid;
        grid-template-areas:
            "header"
            "aside"
            "main";
        grid-template-columns: 1fr 4fr;
        grid-template-rows: auto 1fr;
        height: 100vh;
    }

    .area-header {
        grid-area: header;
        padding: 1rem 2rem;
        background-color: #f8f9fa;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        align-items: center;
    }

    .area-main {
        grid-area: main;
        width: 100dvw;
        padding: 2rem;
        height: 100dvh
        overflow-y: auto;
        align-content: center;  

    }

    .area-aside {
        grid-area: aside;
        padding: 2rem;
        background-color: #f1f3f5;
        width: 100dvw;
        height: 50dvh;
        align-content: center;
        overflow-y: auto;
    }

    .area-aside div {
        margin-bottom: 1.5rem;
        align-self: center;
    }

    .area-aside a {
        display: block;
        text-decoration: none;
        padding: 10px;
    }

    @media (min-width: 1024px) {
        .grid-areas-layout {
            grid-template-areas:
                "header header"
                "aside main";
            grid-template-columns: 1fr 5fr;
            grid-template-rows: auto 1fr auto;
        }

        .area-main {
            width: 100%;
        }

        .area-aside {
            width: 100%;
            height: 100dvh;
        }
    }

</style>