package com.kickstarter;

import android.support.annotation.NonNull;

import com.kickstarter.libs.ApiEndpoint;
import com.kickstarter.libs.BuildCheck;
import com.kickstarter.libs.InternalToolsType;
import com.kickstarter.libs.NoopBuildCheck;
import com.kickstarter.libs.NoopInternalTools;

import javax.inject.Singleton;

import dagger.Module;
import dagger.Provides;

@Module(includes = ApplicationModule.class)
public final class ExternalApplicationModule {
  @Provides
  @Singleton
  ApiEndpoint provideApiEndpoint() {
    return ApiEndpoint.PRODUCTION;
  }

  @Provides
  BuildCheck provideBuildCheck() {
    return new NoopBuildCheck();
  }

  @Provides
  @Singleton
  @NonNull InternalToolsType providesInternalToolsType() {
    return new NoopInternalTools();
  }
}
