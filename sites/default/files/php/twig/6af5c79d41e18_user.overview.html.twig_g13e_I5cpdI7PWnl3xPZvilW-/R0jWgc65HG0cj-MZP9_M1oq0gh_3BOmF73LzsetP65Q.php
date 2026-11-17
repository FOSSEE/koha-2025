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

/* @help_topics/user.overview.html.twig */
class __TwigTemplate_a803c37780fa46126c9625b361ec312a extends Template
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
        // line 5
        yield "<h2>";
        yield t("What is a user?", []);
        yield "</h2>
<p>";
        // line 6
        yield t("A user is anyone accessing or viewing your site. <em>Anonymous</em> users are users who are not logged in, and <em>Authenticated</em> users are users who are logged in.", []);
        yield "</p>
<h2>";
        // line 7
        yield t("What is a role?", []);
        yield "</h2>
<p>";
        // line 8
        yield t("<em>Roles</em> are used to group and classify users; each user can be assigned one or more roles. There are also special roles for all anonymous and all authenticated users.", []);
        yield "</p>
<h2>";
        // line 9
        yield t("What is a permission?", []);
        yield "</h2>
<p>";
        // line 10
        yield t("Granting a <em>permission</em> to a role allows users who have been assigned that role to perform an action on the site, such as viewing content, editing or creating  a particular type of content, administering settings for a particular module, or using a particular function of the site (such as search).", []);
        yield "</p>
<h2>";
        // line 11
        yield t("Overview of managing user accounts and visitors", []);
        yield "</h2>
<p>";
        // line 12
        yield t("The core User module allows users to register, log in, and log out, and administrators to manage user roles and permissions. Depending on which modules you have installed on your site, the related topics below will help you with tasks related to managing user accounts and visitors.", []);
        yield "</p>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/user.overview.html.twig";
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
        return array (  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  45 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/user.overview.html.twig", "/var/www/html/Koha-2025/core/modules/user/help_topics/user.overview.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["trans" => 5];
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
