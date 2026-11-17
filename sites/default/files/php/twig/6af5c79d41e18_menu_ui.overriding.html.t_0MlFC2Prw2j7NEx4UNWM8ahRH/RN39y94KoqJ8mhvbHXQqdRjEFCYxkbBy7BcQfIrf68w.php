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

/* @help_topics/menu_ui.overriding.html.twig */
class __TwigTemplate_f66eac38a13f1734ab9ae48cfe98c689 extends Template
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
        $context["structure_menu_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Menus", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["structure_menu_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["structure_menu_text"] ?? null), "entity.menu.collection"));
        // line 10
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 11
        yield t("Disable menu links or change the order and hierarchy of menu links.", []);
        yield "</p>
<h2>";
        // line 12
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 14
        yield t("In the <em>Manage</em> administration menu, navigate to <em>Structure</em> &gt; @structure_menu_link.", ["@structure_menu_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["structure_menu_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 15
        yield t("Click <em>Edit menu</em> for the menu that you want to edit.", []);
        yield "</li>
  <li>";
        // line 16
        yield t("Drag menu links into a new order, or check/uncheck <em>Enabled</em> to enable or disable menu links.", []);
        yield "</li>
  <li>";
        // line 17
        yield t("Click <em>Save</em> to save your changes.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/menu_ui.overriding.html.twig";
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
        return array (  78 => 17,  74 => 16,  70 => 15,  66 => 14,  61 => 12,  57 => 11,  52 => 10,  50 => 9,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/menu_ui.overriding.html.twig", "/var/www/html/Koha-2025/core/modules/menu_ui/help_topics/menu_ui.overriding.html.twig");
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
