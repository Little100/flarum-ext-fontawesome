import app from 'flarum/admin/app';
import icon from 'flarum/common/helpers/icon';

const testPanelStyle = `
  .Little100FontAwesome-testPanel {
    padding: 12px;
    border-radius: 4px;
    background: var(--control-bg);
    color: var(--control-color);
  }
  .Little100FontAwesome-testPanel legend {
    float: left;
    display: block;
    font-weight: 600;
    margin-bottom: 8px;
  }
  .Little100FontAwesome-testPanel legend + * {
    clear: both;
  }
  .Little100FontAwesome-testPanelEntry {
    padding: 4px 8px;
    display: flex;
    align-items: center;
    gap: 16px;
  }
`;

app.initializers.add('little100/fontawesome', () => {
  const styleEl = document.createElement('style');
  styleEl.textContent = testPanelStyle;
  document.head.appendChild(styleEl);
  app.extensionData
    .for('little100-fontawesome')
    .registerSetting({
      type: 'select',
      setting: 'little100-fontawesome.type',
      label: app.translator.trans('little100-fontawesome.admin.settings.type'),
      options: {
        free: app.translator.trans('little100-fontawesome.admin.settings.type_free'),
        kit: app.translator.trans('little100-fontawesome.admin.settings.type_kit'),
      },
    })
    .registerSetting({
      type: 'text',
      setting: 'little100-fontawesome.kitUrl',
      label: app.translator.trans('little100-fontawesome.admin.settings.kit_url'),
      help: app.translator.trans('little100-fontawesome.admin.settings.kit_url_help'),
    })
    .registerSetting(() => {
      return (
        <fieldset class="Form-group Little100FontAwesome-testPanel">
          <legend>{app.translator.trans('little100-fontawesome.admin.settings.test.heading')}</legend>
          <p>{app.translator.trans('little100-fontawesome.admin.settings.test.desc')}</p>

          {Object.entries({
            fa5_compat: 'fab fa-font-awesome-flag',
            fa6_free: 'fas fa-person-rays',
            fa7_free: 'fa-brands fa-openai',
          }).map(([key, i]) => (
            <div class="Little100FontAwesome-testPanelEntry">
              {icon(`${i} fa-2x fa-fw`)}
              <span>{app.translator.trans(`little100-fontawesome.admin.settings.test.${key}`)}</span>
            </div>
          ))}
        </fieldset>
      );
    });
});
