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

/* @help_topics/views_ui.create.html.twig */
class __TwigTemplate_9ab84fca13b5ab6838ca2c34e50e875b extends Template
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
        $context["views_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Views", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["views_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["views_link_text"] ?? null), "entity.view.collection"));
        // line 10
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 11
        yield t("Create a new view to list content or other items on your site.", []);
        yield "</p>
<h2>";
        // line 12
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 14
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@views_link</em>.", ["@views_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["views_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 15
        yield t("Click <em>Add view</em>.", []);
        yield "</li>
  <li>";
        // line 16
        yield t("In the <em>View name</em> field, enter a name for the view, which is how it will be listed in the administrative interface.", []);
        yield "</li>
  <li>";
        // line 17
        yield t("In <em>View settings</em> &gt; <em>Show</em>, select the base data type to display in your view. This cannot be changed later.", []);
        yield "</li>
  <li>";
        // line 18
        yield t("Optionally, select or enter filtering, sorting, and page/block display settings; these can be added or changed later.", []);
        yield "</li>
  <li>";
        // line 19
        yield t("Click <em>Save and edit</em>. Your view will be created; edit it following the steps in the related topics below.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/views_ui.create.html.twig";
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
        return array (  86 => 19,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  61 => 12,  57 => 11,  52 => 10,  50 => 9,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/views_ui.create.html.twig", "/var/www/html/Koha-2025/core/modules/views_ui/help_topics/views_ui.create.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 8, "trans" => 8];
        static $filters = ["escape" => 14];
        static $functions = ["render_var" => 9, "help_route_link" => 9];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "trans"],
                [0 => "escape"],
                [0 => "render_var", 1 => "help_route_link"],
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
