<x-guest-layout 
    :title="'Terms of Service - ' . config('app.name')"
    description="Telis Terms of Service - Use of the Telis website and all related services is subject to the following terms of service."
    :ogTitle="'Terms of Service - ' . config('app.name')"
    ogDescription="Read the Terms of Service for Telis. Learn about the rules and guidelines for using our open-source CRM platform.">
    <x-legal-document
        title="Terms of Service"
        subtitle="Use of the Telis website and all related services is subject to the following terms of service."
        :content="$terms"
    />
</x-guest-layout>
