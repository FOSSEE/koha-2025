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

/* @help_topics/core.ui_components.html.twig */
class __TwigTemplate_60b9cb82eb87073815c9194a278d659c extends Template
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
        $context["accessibility_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.ui_accessibility"));
        // line 8
        $context["admin_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink("/admin", "system.admin"));
        // line 9
        yield "<h2>";
        yield t("What administrative interface components are available?", []);
        yield "</h2>
<p>";
        // line 10
        yield t("The following administrative interface components are provided by the core software and its modules (some contributed modules offer additional functionality):", []);
        yield "</p>
<ul>
  <li>";
        // line 12
        yield t("Accessibility features, to enable all users to perform administrative tasks. See @accessibility_topic for more information.", ["@accessibility_topic" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["accessibility_topic"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 13
        yield t("A menu system, which you can navigate to find pages for administrative tasks. The core Toolbar module displays this menu on the top or left side of the page (right side in right-to-left languages). There are also contributed module replacements for the core Toolbar module, with additional features, such as the <a href=\"https://www.drupal.org/project/admin_toolbar\">Admin Toolbar module</a>.", []);
        yield "</li>
  <li>";
        // line 14
        yield t("If you install the core Contextual Links module, non-administrative pages will contain links leading to related administrative tasks.", []);
        yield "</li>
  <li>";
        // line 15
        yield t("The core Help module displays help topics, and provides a Help block that can be placed on administrative pages to provide an overview of their functionality.", []);
        yield "</li>
</ul>
<h2>";
        // line 17
        yield t("What are the sections of the administrative menu?", []);
        yield "</h2>
<p>";
        // line 18
        yield t("The administrative menu, which you can navigate by visiting <em>@admin_link</em> on your site or by using an administrative toolbar, has the following sections (some may not be available, depending on which modules are currently installed on your site, and your permissions):", ["@admin_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["admin_link"] ?? null)), ]);
        yield "</p>
<ul>
  <li>";
        // line 20
        yield t("<strong>Content:</strong> Find, manage, and create new pages; manage comments and files.", []);
        yield "</li>
  <li>";
        // line 21
        yield t("<strong>Structure:</strong> Place and edit blocks, set up content types and fields, configure menus, administer taxonomy, and configure some contributed modules.", []);
        yield "</li>
  <li>";
        // line 22
        yield t("<strong>Appearance:</strong> Switch between themes, install themes, and update existing themes.", []);
        yield "</li>
  <li>";
        // line 23
        yield t("<strong>Extend:</strong> Update, install, and uninstall modules.", []);
        yield "</li>
  <li>";
        // line 24
        yield t("<strong>Configuration:</strong> Configure the settings for various site functionality, including some contributed modules.", []);
        yield "</li>
  <li>";
        // line 25
        yield t("<strong>People:</strong> Manage user accounts and permissions.", []);
        yield "</li>
  <li>";
        // line 26
        yield t("<strong>Reports:</strong> Display information about site security, necessary updates, and site activity.", []);
        yield "</li>
  <li>";
        // line 27
        yield t("<strong>Help:</strong> Get help on using the administrative interface.", []);
        yield "</li>
</ul>
<h2>";
        // line 29
        yield t("Administrative interface overview", []);
        yield "</h2>
<p>";
        // line 30
        yield t("Install the core modules mentioned above to use the corresponding aspect of the administrative interface. See the related topics listed below for more details on some aspects of the administrative interface.", []);
        yield "</p>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/core.ui_components.html.twig";
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
        return array (  122 => 30,  118 => 29,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  85 => 20,  80 => 18,  76 => 17,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  54 => 10,  49 => 9,  47 => 8,  45 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/core.ui_components.html.twig", "/var/www/html/Koha-2025/core/modules/help/help_topics/core.ui_components.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 7, "trans" => 9];
        static $filters = ["escape" => 12];
        static $functions = ["render_var" => 7, "help_topic_link" => 7, "help_route_link" => 8];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "trans"],
                [0 => "escape"],
                [0 => "render_var", 1 => "help_topic_link", 2 => "help_route_link"],
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
