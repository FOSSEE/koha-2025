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

/* @help_topics/system.theme_install.html.twig */
class __TwigTemplate_dcbcbe1563c2b7e447c9ecfd48bd0619 extends Template
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
        $context["themes_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Appearance", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["themes_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["themes_link_text"] ?? null), "system.themes_page"));
        // line 9
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 10
        yield t("Install a core theme, or a contributed theme that has already been downloaded. Choose the default themes to use for the site and for administrative pages.", []);
        yield "</p>
<h2>";
        // line 11
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 13
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>@themes_link</em>.", ["@themes_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["themes_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 14
        yield t("Locate the themes that you want to use as the site default theme and for administrative pages.", []);
        yield "</li>
  <li>";
        // line 15
        yield t("For each of these themes, if the theme is in the <em>Uninstalled themes</em> section, click the <em>Install</em> link to install the theme. Wait for the theme to be installed (translations might be downloaded). You should be returned to the <em>Appearance</em> page.", []);
        yield "</li>
  <li>";
        // line 16
        yield t("Locate the theme that you want to be your default theme, which should now be in the <em>Installed themes</em> section. If it is not already labeled as the <em>default theme</em>, click the <em>Set as default</em> link.", []);
        yield "</li>
  <li>";
        // line 17
        yield t("At the bottom of the page, select the <em>Administration theme</em> that you want to use on administrative pages. Click <em>Save configuration</em> if you selected a new theme.", []);
        yield "</li>
  <li>";
        // line 18
        yield t("If you changed the default theme for your site, visit the site home page or another page on the non-administration part of your site and verify that the site is using the new theme. If you changed the administration theme, verify that the new theme is used on administrative pages.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/system.theme_install.html.twig";
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
        return new Source("", "@help_topics/system.theme_install.html.twig", "/var/www/html/Koha-2025/core/modules/system/help_topics/system.theme_install.html.twig");
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
