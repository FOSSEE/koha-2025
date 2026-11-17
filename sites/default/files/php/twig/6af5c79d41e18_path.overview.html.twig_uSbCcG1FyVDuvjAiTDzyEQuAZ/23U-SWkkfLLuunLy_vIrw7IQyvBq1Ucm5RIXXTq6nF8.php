<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @help_topics/path.overview.html.twig */
class __TwigTemplate_1075ef67d1bbe5470d61a6b127dcac0f extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "<h2>";
        yield t("What is a URL?", []);
        yield "</h2>
<p>";
        // line 9
        yield t("URL is the abbreviation for \"Uniform Resource Locator\", which is the page\x27s address on the web. It is the \"name\" by which a browser identifies a page to display. In the example \"Visit us at <em>example.com</em>.\", <em>https://example.com</em> would be the URL for the home page of your website. Users use URLs to locate content on the web.", []);
        yield "</p>
<h2>";
        // line 10
        yield t("What is a path?", []);
        yield "</h2>
<p>";
        // line 11
        yield t("A path is the unique, last part of the URL for a specific function or piece of content. For example, for a page whose full URL is <em>https://example.com/node/7</em>, the path is <em>node/7</em>. Here are some examples of paths you might find in your site:", []);
        yield "</p>
<ul>
  <li>";
        // line 13
        yield t("node/7: Path to a particular content item.", []);
        yield "</li>
  <li>";
        // line 14
        yield t("taxonomy/term/6: Path to a taxonomy term page.", []);
        yield "</li>
  <li>";
        // line 15
        yield t("user/3: Path to a user profile page.", []);
        yield "</li>
</ul>
<h2>";
        // line 17
        yield t("What is an alias?", []);
        yield "</h2>
<p>";
        // line 18
        yield t("The core software allows you to provide more understandable URLs for pages on your site, which are called <em>aliases</em>. For example, if you have an \"About Us\" page with the path <em>node/7</em>, you can set up an alias of <em>about</em> so that your visitors will see it as <em>https://www.example.com/about</em>.", []);
        yield "</p>
<h2>";
        // line 19
        yield t("Overview of configuring paths, aliases, and URLs", []);
        yield "</h2>
<p>";
        // line 20
        yield t("The core Path module provides the URL aliasing functionality. The contributed <a href=\"https://www.drupal.org/project/pathauto\">Pathauto</a> module allows you to configure automatically-generated URL aliases for content items and other pages. See the related topics listed below for specific tasks.", []);
        yield "</p>
<h2>";
        // line 21
        yield t("Additional resources", []);
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/content-paths.html\">";
        // line 23
        yield t("Concept: Paths, Aliases, and URLs (Drupal User Guide)", []);
        yield "</a></li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/path.overview.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  97 => 23,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  71 => 15,  67 => 14,  63 => 13,  58 => 11,  54 => 10,  50 => 9,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/path.overview.html.twig", "/var/www/html/Koha-2025/core/modules/path/help_topics/path.overview.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["trans" => 8];
        static $filters = [];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "trans"],
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
