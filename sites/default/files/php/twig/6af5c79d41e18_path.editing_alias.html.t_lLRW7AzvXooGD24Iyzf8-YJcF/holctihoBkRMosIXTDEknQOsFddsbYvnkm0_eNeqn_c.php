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

/* @help_topics/path.editing_alias.html.twig */
class __TwigTemplate_67e4db5095dcc04788f47c55a0db333b extends Template
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
        // line 7
        $context["path_permissions_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 8
            yield "  ";
            yield t("Administer URL aliases", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["path_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["path_permissions_link_text"] ?? null), "user.admin_permissions.module", ["modules" => "path"]));
        // line 11
        $context["path_aliases_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 12
            yield "  ";
            yield t("URL aliases", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        $context["path_aliases_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["path_aliases_link_text"] ?? null), "entity.path_alias.collection"));
        // line 15
        $context["path_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("path.overview"));
        // line 16
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 17
        yield t("Change an existing URL alias, to correct the path or the alias value. See @path_overview_topic for more about aliases.", ["@path_overview_topic" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["path_overview_topic"] ?? null)), ]);
        yield "</p>
<h2>";
        // line 18
        yield t("Who can manage URL aliases?", []);
        yield "</h2>
<p>";
        // line 19
        yield t("Users with the <em>@path_permissions_link</em> permission can edit aliases.", ["@path_permissions_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["path_permissions_link"] ?? null)), ]);
        yield "</p>
<h2>";
        // line 20
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 22
        yield t("In the <em>Manage</em> administration menu, navigate to <em>Configuration</em> &gt; <em>Search and metadata</em> &gt; <em>@path_aliases_link</em>. A list of all the site\x27s aliases will appear.", ["@path_aliases_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["path_aliases_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 23
        yield t("Click <em>Edit</em> in the dropdown button for the alias that you would like to change.", []);
        yield "</li>
  <li>";
        // line 24
        yield t("Make the required changes and click <em>Save</em>. You will be returned to the URL alias list page.", []);
        yield "</li>
  <li>";
        // line 25
        yield t("Note that you can also add new aliases from this page, for any path on your site.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/path.editing_alias.html.twig";
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
        return array (  99 => 25,  95 => 24,  91 => 23,  87 => 22,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  65 => 16,  63 => 15,  61 => 14,  56 => 12,  54 => 11,  52 => 10,  47 => 8,  45 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/path.editing_alias.html.twig", "/var/www/html/Koha-2025/core/modules/path/help_topics/path.editing_alias.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 7, "trans" => 8];
        static $filters = ["escape" => 17];
        static $functions = ["render_var" => 10, "help_route_link" => 10, "help_topic_link" => 15];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "trans"],
                [0 => "escape"],
                [0 => "render_var", 1 => "help_route_link", 2 => "help_topic_link"],
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
