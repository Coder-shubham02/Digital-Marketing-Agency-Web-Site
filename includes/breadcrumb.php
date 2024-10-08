<!-- includes/breadcrumb.php -->

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">
            <?php echo ucfirst(basename($_SERVER['PHP_SELF'], ".php")); ?>
        </li>
    </ol>
</nav>