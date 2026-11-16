# PHP-Template-Engines

| # | Engine | Syntax example | Best known for |
|---|--------|----------------|----------------|
| 1 | **Twig** (Symfony) | `{{ title }}`, `{% for p in projekte %}` | The most common standalone engine. It escapes output automatically, supports template inheritance and has a sandbox mode. It is used in Symfony, Drupal and Craft CMS. |
| 2 | **Blade** (Laravel) | `{{ $title }}`, `@foreach($projekte as $p)` | Laravel's engine, compiled to plain PHP so it is very fast. It has components and layouts. It is mostly used inside Laravel, though standalone ports exist. |
| 3 | **Latte** (Nette) | `{$title}`, `{foreach $projekte as $p}` | Its syntax is close to PHP. It escapes output based on context (HTML, JS, attributes), which makes it one of the strongest against XSS. |
| 4 | **Smarty** | `{$title}`, `{foreach $projekte as $p}` | The oldest one, from 2001, and still maintained. It appears in older projects such as PrestaShop. |
| 5 | **Plates** (The PHP League) | `<?= $this->e($title) ?>` | Plain PHP templates with layouts and sections added on top. Nothing gets compiled and there is no new syntax to learn. |
