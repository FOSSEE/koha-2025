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

/* @help_topics/contact.configuring_personal.html.twig */
class __TwigTemplate_c61b4c33f51b02361d1a3dca423aba13 extends Template
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
        $context["config_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Account settings", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["config_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["config_link_text"] ?? null), "entity.user.admin_form"));
        // line 9
        $context["permission_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Permissions", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["permission_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["permission_link_text"] ?? null), "user.admin_permissions"));
        // line 11
        $context["adding_fields_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("contact.adding_fields"));
        // line 12
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 13
        yield t("Configure personal contact forms for registered users on the website.", []);
        yield "</p>
<h2>";
        // line 14
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 16
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>People</em> &gt; <em>@config_link</em>.", ["@config_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["config_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 17
        yield t("In the <em>Contact settings</em> section, check/uncheck the box to enable/disable the contact form for new user accounts.", []);
        yield "</li>
  <li>";
        // line 18
        yield t("Click <em>Save configuration</em>.", []);
        yield "</li>
  <li>";
        // line 19
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>People</em> &gt; <em>@permission_link</em>.", ["@permission_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["permission_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 20
        yield t("Verify that permissions are correct for your site\x27s roles, including the generic <em>Anonymous user</em> and <em>Authenticated user</em>. In order to use personal contact forms, users need both <em>View user information</em> (in the <em>User</em> section, which enables them to view user profiles) and <em>Use users\x27 personal contact forms</em> (in the <em>Contact</em> section, which enables them to use contact forms if they can view user profiles).", []);
        yield "</li>
  <li>";
        // line 21
        yield t("Click <em>Save permissions</em>.", []);
        yield "</li>
  <li>";
        // line 22
        yield t("The contact form will always have <em>Subject</em> and <em>Message</em> fields. If you want to add more fields, follow the steps in @adding_fields_topic.", ["@adding_fields_topic" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["adding_fields_topic"] ?? null)), ]);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/contact.configuring_personal.html.twig";
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
        return array (  99 => 22,  95 => 21,  91 => 20,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  70 => 14,  66 => 13,  61 => 12,  59 => 11,  57 => 10,  52 => 9,  50 => 8,  45 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/contact.configuring_personal.html.twig", "/var/www/html/Koha-2025/core/modules/contact/help_topics/contact.configuring_personal.html.twig");
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
        static $filters = ["escape" => 16];
        static $functions = ["render_var" => 8, "help_route_link" => 8, "help_topic_link" => 11];
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
