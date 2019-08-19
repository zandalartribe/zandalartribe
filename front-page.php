<?php get_header(); ?>

    <?php get_template_part('news'); ?>

    <?php get_template_part('progression'); ?>

</div> <!-- /wrapper -->

<?php get_template_part('story-so-far'); ?>

<div class="wrapper">

    <h1>Community Links</h1>

    <ul class="community-links">
        <li>
            <a class="discord-widget" href="https://discord.gg/rJnj8JQ" title="Join the Alliance on Discord">
                <img src="https://discordapp.com/api/guilds/505312121479757824/embed.png?style=banner2">
            </a>
            Alliance Faction Discord
        </li>
        <li>
            <a class="discord-widget" href="https://discord.gg/dgrCqsB" title="Join us on Discord">
                <img src="https://discordapp.com/api/guilds/611250505603350530/embed.png?style=banner2">
            </a>
            Server Discord
        </li>
        <li>
            <a class="discord-widget" href="https://discord.gg/9tKtCmj" title="Join the Horde on Discord">
                <img src="https://discordapp.com/api/guilds/589202224492576799/embed.png?style=banner2">
            </a>
            Horde Faction Discord
        </li>
        <li>
            <a href="https://www.reddit.com/r/ZandalarTribe/" class="reddit-widget">
                <img src="<?php echo get_template_directory_uri(); ?>/images/subreddit.png">
                r/ZandalarTribe
            </a>
            Community Subreddit
    </ul>

<?php get_footer(); ?>