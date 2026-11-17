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

/* @help_topics/system.module_uninstall.html.twig */
class __TwigTemplate_012a596d07dada341b5b4e9c6b4187e2 extends Template
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
        $context["uninstall_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Uninstall", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["uninstall_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["uninstall_link_text"] ?? null), "system.modules_uninstall"));
        // line 10
        $context["maintenance_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("system.maintenance_mode"));
        // line 11
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 12
        yield t("Uninstall a module. Your site should be in <em>maintenance mode</em> when you uninstall modules. See @maintenance_topic for details.", ["@maintenance_topic" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["maintenance_topic"] ?? null)), ]);
        yield "</p>
<h2>";
        // line 13
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 15
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Extend</em> &gt; <em>@uninstall_link</em>.", ["@uninstall_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["uninstall_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 16
        yield t("Enter a word from the module name or description into the filter box, to make the list of modules smaller. Locate the module you want to uninstall.", []);
        yield "</li>
  <li>";
        // line 17
        yield t("In the <em>Description</em> column, see if there are reasons that this module cannot be uninstalled. For example, you may have created content using this module (which you would need to delete first), or there may be another module installed that requires this module to be installed (you would need to uninstall the other module first).", []);
        yield "</li>
  <li>";
        // line 18
        yield t("If there are no reasons listed, the module can be uninstalled. Check the box in the <em>Uninstall</em> column, next to the module\x27s name.", []);
        yield "</li>
  <li>";
        // line 19
        yield t("Click <em>Uninstall</em> at the bottom of the page. Verify the list of modules to be uninstalled and configuration to be deleted on the confirmation page, and click <em>Uninstall</em>.", []);
        yield "</li>
  <li>";
        // line 20
        yield t("Wait for the module to be uninstalled. You should be returned to the <em>Uninstall</em> page with a message saying the module was uninstalled.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/system.module_uninstall.html.twig";
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
        return array (  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  63 => 13,  59 => 12,  54 => 11,  52 => 10,  50 => 9,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/system.module_uninstall.html.twig", "/var/www/html/Koha-2025/core/modules/system/help_topics/system.module_uninstall.html.twig");
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
        static $filters = ["escape" => 12];
        static $functions = ["render_var" => 9, "help_route_link" => 9, "help_topic_link" => 10];
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
