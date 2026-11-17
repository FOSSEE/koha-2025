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

/* @help_topics/search.configuring.html.twig */
class __TwigTemplate_a12d876765cd54717a8a7461ce5e8d3e extends Template
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
        $context["search_settings_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Search pages", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["search_settings_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["search_settings_link_text"] ?? null), "entity.search_page.collection"));
        // line 9
        $context["search_index_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("search.index"));
        // line 10
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 11
        yield t("Configure one or more search pages.", []);
        yield "</p>
<h2>";
        // line 12
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 14
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Search and Metadata</em> &gt; <em>@search_settings_link</em>.", ["@search_settings_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["search_settings_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 15
        yield t("Scroll down to the <em>Search pages</em> section. You will see a list of the already-configured search pages on your site.", []);
        yield "</li>
  <li>";
        // line 16
        yield t("To configure an existing search page, click <em>Edit</em>. Or, to add a new search page, select the <em>Search page type</em> and click <em>Add search page</em>.", []);
        yield "</li>
  <li>";
        // line 17
        yield t("Enter the desired <em>Label</em> name and URL <em>Path</em> for the search page.", []);
        yield "</li>
  <li>";
        // line 18
        yield t("For <em>Content</em> search pages, select the desired level of influence in ranking search results of the available <em>Content ranking</em> factors.", []);
        yield "</li>
  <li>";
        // line 19
        yield t("Click <em>Save</em>. You will be returned to the <em>Search pages</em> page.", []);
        yield "</li>
  <li>";
        // line 20
        yield t("Verify that the correct search page is listed as <em>Default</em> in the <em>Status</em> column. If not, click <em>Set as default</em> in the <em>Operations</em> list for the correct search page.", []);
        yield "</li>
  <li>";
        // line 21
        yield t("Optionally, disable or delete any search pages that you do not want to have available on the site (disabling is temporary, while deleting is permanent).", []);
        yield "</li>
  <li>";
        // line 22
        yield t("Follow the steps in @search_index_topic to make sure that the search index is updated.", ["@search_index_topic" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["search_index_topic"] ?? null)), ]);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/search.configuring.html.twig";
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
        return array (  100 => 22,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  63 => 12,  59 => 11,  54 => 10,  52 => 9,  50 => 8,  45 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/search.configuring.html.twig", "/var/www/html/Koha-2025/core/modules/search/help_topics/search.configuring.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 7, "trans" => 7];
        static $filters = ["escape" => 14];
        static $functions = ["render_var" => 8, "help_route_link" => 8, "help_topic_link" => 9];
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
