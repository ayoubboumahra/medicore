<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{block name="title"}Medicore{/block}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link href="/assets/styles/style.css" rel="stylesheet" />
    {block name="styles"}{/block}
</head>
<body>
    <div class="p-3">
        <div class="row">
            
                {include file="./includes/sidebar.tpl" }
            
                
            <div class="col-xl-10 col-lg-9">
                {include file="./includes/header.tpl"}
                {if isset($success)}
                    <div class="alert alert-success">
                        {$success}
                    </div>
                {/if}
                {if isset($error)}
                    <div class="alert alert-danger">
                        {$error}
                    </div>
                {/if}
                
                {block name="body"}{/block}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    {block name="scripts"}{/block}
</body>
</html>