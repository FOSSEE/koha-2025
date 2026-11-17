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

/* @help_topics/menu_ui.menu_operations.html.twig */
class __TwigTemplate_ef2a7f31f90b1932f451d577385cf027 extends Template
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
        $context["structure_menu_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Menus", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["structure_menu_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["structure_menu_text"] ?? null), "entity.menu.collection"));
        // line 9
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 10
        yield t("Create a new menu.", []);
        yield "</p>
<h2>";
        // line 11
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 13
        yield t("In the <em>Manage</em> administration menu, navigate <em>Structure</em> &gt; @structure_menu_link.", ["@structure_menu_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["structure_menu_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 14
        yield t("Click <em>Add menu</em>.", []);
        yield "</li>
  <li>";
        // line 15
        yield t("Enter the title for the menu, which is used as the default block title if the menu is displayed as a block. If desired, also edit the machine name of the menu, which is by default derived from the title.", []);
        yield "</li>
  <li>";
        // line 16
        yield t("Enter an administrative summary, which is displayed on the <em>Menus</em> page.", []);
        yield "</li>
  <li>";
        // line 17
        yield t("If your site has more than one language, choose the language for the menu.", []);
        yield "</li>
  <li>";
        // line 18
        yield t("Click <em>Save</em>. You will be on the menu editing page, ready to add links to the menu if the core Custom Menu Links module is installed; see related topics for further tasks.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/menu_ui.menu_operations.html.twig";
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
        return array (  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  61 => 11,  57 => 10,  52 => 9,  50 => 8,  45 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/menu_ui.menu_operations.html.twig", "/var/www/html/Koha-2025/core/modules/menu_ui/help_topics/menu_ui.menu_operations.html.twig");
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
        static $filters = ["escape" => 13];
        static $functions = ["render_var" => 8, "help_route_link" => 8];
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
