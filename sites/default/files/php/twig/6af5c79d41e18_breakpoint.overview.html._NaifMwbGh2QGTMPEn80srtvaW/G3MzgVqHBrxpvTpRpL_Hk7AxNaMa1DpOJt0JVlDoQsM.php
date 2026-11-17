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

/* @help_topics/breakpoint.overview.html.twig */
class __TwigTemplate_a1b8701687e6b4ac9207b0aac55ebedb extends Template
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
        // line 6
        yield "<h2>";
        yield t("What are breakpoints?", []);
        yield "</h2>
<p>";
        // line 7
        yield t("Breakpoints are the point at which your site\x27s content will respond to provide the user with the best possible layout to consume the information. A breakpoint separates the height or width of viewports (screens, printers, and other media output types) into steps. For instance, a width breakpoint of 40em creates two steps: one for widths up to 40em and one for widths above 40em. Breakpoints can be used to define when layouts should shift from one form to another, when images should be resized, and other changes that need to respond to changes in viewport height or width.", []);
        yield "</p>
<h2>";
        // line 8
        yield t("What are media queries?", []);
        yield "</h2>
<p>";
        // line 9
        yield t("Media  queries are a formal way to encode breakpoints. For instance, a width breakpoint at 40em would be written as the media query \"(min-width: 40em)\". Breakpoints are really just media queries with some additional meta-data, such as a name and multiplier information.", []);
        yield "</p>
<h2>";
        // line 10
        yield t("What are resolution multipliers?", []);
        yield "</h2>
<p>";
        // line 11
        yield t("Resolution multipliers are a measure of the viewport\x27s device resolution, defined to be the ratio between the physical pixel size of the active device and the <a href=\"http://en.wikipedia.org/wiki/Device_independent_pixel\">device-independent pixel</a> size. The Breakpoint module defines multipliers of 1, 1.5, and 2; when defining breakpoints, modules and themes can define which multipliers apply to each breakpoint.", []);
        yield "</p>
<h2>";
        // line 12
        yield t("What is a breakpoint group?", []);
        yield "</h2>
<p>";
        // line 13
        yield t("Breakpoints can be organized into groups. Modules and themes should use groups to separate out breakpoints that are meant to be used for different purposes, such as breakpoints for layouts or breakpoints for image sizing.", []);
        yield "</p>
<h2>";
        // line 14
        yield t("Managing breakpoints and breakpoint groups overview", []);
        yield "</h2>
<p>";
        // line 15
        yield t("The <em>Breakpoint</em> module allows you to define breakpoints and breakpoint groups in YAML files. Modules and themes can use the API provided by the <em>Breakpoint</em> module to define breakpoints and breakpoint groups, and to assign resolution multipliers to breakpoints.", []);
        // line 16
        yield "</p>
<h2>";
        // line 17
        yield t("Additional resources", []);
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/documentation/modules/breakpoint\">";
        // line 19
        yield t("Working with breakpoints in Drupal", []);
        yield "</a></li>
  <li><a href=\"https://www.w3.org/TR/css3-mediaqueries/\">";
        // line 20
        yield t("W3C standards for media queries", []);
        yield "</a></li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/breakpoint.overview.html.twig";
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
        return array (  96 => 20,  92 => 19,  87 => 17,  84 => 16,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  45 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/breakpoint.overview.html.twig", "/var/www/html/Koha-2025/core/modules/breakpoint/help_topics/breakpoint.overview.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["trans" => 6];
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
