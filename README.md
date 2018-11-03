Craft Slugify for Craft 3.x
=====
 
Craft Slugify simply adds the Twig filter "slugify" to your Craft install, the [cocur/slugify](https://github.com/cocur/slugify) package is used for the actual slug generation.

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

```
cd /path/to/project
```


2. Then tell Composer to load the plugin:

```
composer require guilty/craft-slugify
```

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Craft Slugify.


## Using Craft Slugify

```twig

{% set posts = craft.entries.section("posts").all() %}

<h1>Table of contents</h1>
<ul>
    {% for post in posts %}
        <li><a href="#{{ post.title | slugify }}"> {{ post.title }}</a></li>
    {% endfor %}
</ul>

<hr>

{% for post in posts %}
    <article id="{{ post.title | slugify }}">
        <h2>{{ post.title }}</h2>
        <div>{{ post.bodyContent }}</div>
    </article>
{% endfor %}

```

Brought to you by [Guilty AS](https://guilty.no)