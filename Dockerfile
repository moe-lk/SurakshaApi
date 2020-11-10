FROM moelk/laravel

# Install cron
USER bitnami
RUN rm  composer.lock

COPY --chown=bitnami:bitnami . /app

EXPOSE 80
